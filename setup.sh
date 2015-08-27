#!/bin/bash

cd /tmp
wget http://releases.wikimedia.org/mediawiki/1.25/mediawiki-1.25.1.tar.gz
mkdir /root/docker
cd /root/docker
tar zxvf /tmp/mediawiki-1.25.1.tar.gz -C /root/docker/
cd /root/docker/mediawiki-1.25.1/extensions
git clone https://gerrit.wikimedia.org/r/mediawiki/extensions/Collection
git clone https://gerrit.wikimedia.org/r/p/mediawiki/extensions/UniversalLanguageSelector.git
git clone -b REL1_25 https://gerrit.wikimedia.org/r/p/mediawiki/extensions/VisualEditor.git
cd VisualEditor
git submodule update –init
cd /root/docker
export COMPOSE_FILE=docker-compose.yml
docker-compose up -d
