#!/bin/bash

FECHA=$(date +%Y-%m-%d_%H-%M-%S)
tar -czf /var/backups/ramblon/backup_$FECHA.tar.gz /var/www/ramblon
echo "Backup hecho: $FECHA"#!/bin/bash
FECHA=$(date +%Y-%m-%d_%H-%M-%S)
tar -czf /var/backups/ramblon/backup_$FECHA.tar.gz /var/www/ramblon
echo "Backup hecho: $FECHA"
