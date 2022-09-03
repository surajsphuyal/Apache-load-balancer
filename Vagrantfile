Vagrant.configure("2") do |config|
  config.vm.define "mainserver" do |mainserver|
    mainserver.vm.box = "ubuntu/focal64"
	mainserver.vm.network "private_network", ip: "192.168.56.30"
	mainserver.vm.provision :shell, path: "setup_scripts/ansiblesetup.sh"
	mainserver.vm.provision :shell, path: "setup_scripts/apachesetup.sh"
	mainserver.vm.provider "virtualbox" do |vb|
		vb.memory = 1024
		vb.cpus = 1
	end
  end
  
  config.vm.define "backendserver1" do |backendserver1|
    backendserver1.vm.box = "ubuntu/focal64"
	backendserver1.vm.network "private_network", ip: "192.168.56.31"
	backendserver1.vm.provider "virtualbox" do |vb|
		vb.memory = 1024
		vb.cpus = 1
	end
  end
  
  config.vm.define "backendserver2" do |backendserver2|
    backendserver2.vm.box = "ubuntu/focal64"
	backendserver2.vm.network "private_network", ip: "192.168.56.32"
	backendserver2.vm.provider "virtualbox" do |vb|
		vb.memory = 1024
		vb.cpus = 1
	end
  end
  
  config.vm.define "dbserver" do |dbserver|
    dbserver.vm.box = "ubuntu/focal64"
	dbserver.vm.network "private_network", ip: "192.168.56.33"
	dbserver.vm.provider "virtualbox" do |vb|
		vb.memory = 1024
		vb.cpus = 1
	end
  end
  

end
