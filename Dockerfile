FROM mysql:8.0

# Copiar archivo SQL a la carpeta donde MySQL buscará inicializar
COPY inventario.sql /docker-entrypoint-initdb.d/