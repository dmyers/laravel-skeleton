VAGRANTFILE_API_VERSION ||= "2"
confDir = $confDir ||= File.expand_path("vendor/laravel/homestead", File.dirname(__FILE__))

require File.expand_path(confDir + '/scripts/homestead.rb')

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    Homestead.configure(config, {
      "ip" => "192.168.10.10",
      "memory" => 2048,
      "cpus" => 1,
      "hostname" => "homestead",
      "name" => "app",
      "provider" => "virtualbox",
      "authorize" => "~/.ssh/id_rsa.pub",
      "keys" => [
        "~/.ssh/id_rsa"
      ],
      "folders" => [
        {
          "map" => File.expand_path(File.dirname(__FILE__)),
          "to" => "/home/vagrant/app",
          "type" => "nfs"
        }
      ],
      "sites" => [
        {
          "map" => "laravel.app",
          "to" => "/home/vagrant/app/public"
        }
      ],
      "databases" => [
        "app"
      ],
      "variables" => [
        {
          "key" => "APP_ENV",
          "value" => "local"
        },
        {
          "key" => "APP_DEBUG",
          "value" => "true"
        }
      ]
    })
    
    config.vm.provision "shell" do |s|
      s.inline = "cd /home/vagrant/app && /usr/local/bin/composer install"
      s.inline = "cd /home/vagrant/app && /usr/bin/npm install"
      s.inline = "cd /home/vagrant/app && /usr/bin/php artisan migrate"
      s.inline = "cd /home/vagrant/app && /usr/bin/gulp watch"
    end
end
