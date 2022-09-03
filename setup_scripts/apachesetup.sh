#!/bin/bash

# Install Apache
sudo apt update
sudo apt install apache2 -y
sudo ufw allow 'Apache'
sudo systemctl restart apache2