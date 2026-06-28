# Usuarios y permisos — Servidor Ubuntu

## Grupos
- administradores
- desarrolladores
- basedatos

## Usuarios
- ramblon (usuario principal)
- admin_ramblon (grupo: administradores, sudo)
- webdev (grupo: desarrolladores)
- dbadmin (grupo: basedatos)

## Estructura de carpetas y permisos

/var/www/ramblon (755, webdev:desarrolladores)
/var/backups/ramblon (750, dbadmin:basedatos)

## Comandos utilizados

sudo groupadd administradores
sudo groupadd desarrolladores
sudo groupadd basedatos

sudo useradd -m -s /bin/bash admin_ramblon
sudo useradd -m -s /bin/bash webdev
sudo useradd -m -s /bin/bash dbadmin

sudo usermod -aG administradores,sudo admin_ramblon
sudo usermod -aG desarrolladores webdev
sudo usermod -aG basedatos dbadmin

sudo mkdir -p /var/www/ramblon
sudo mkdir -p /var/backups/ramblon

sudo chown -R webdev:desarrolladores /var/www/ramblon
sudo chmod -R 755 /var/www/ramblon

sudo chown -R dbadmin:basedatos /var/backups/ramblon
sudo chmod -R 750 /var/backups/ramblon

