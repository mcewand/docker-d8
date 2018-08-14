# Generic Drupal 8 Site

## Usage
Install Docker.
* Mac: https://store.docker.com/editions/community/docker-ce-desktop-mac

Add any test modules to the 'modules' directory in the repo.
Add any themes to the 'themes' directory in this repo.

From the root of this directory, do
```
docker-compose -f docker-compose.yml up
```
This sets up a full Drupal site at http://localhost:8080

The admin user and password for the site are 'admin'.

