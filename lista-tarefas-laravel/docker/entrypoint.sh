#!/bin/bash
set -e

# Aguarda o banco de dados estar pronto
echo "Aguardando banco de dados..."
sleep 5

# Instala dependências do Composer se não existirem
if [ ! -d "vendor" ]; then
    echo "Instalando dependências do Composer..."
    composer install --no-interaction --prefer-dist --optimize-autoloader
else
    echo "Dependências do Composer já instaladas."
fi

# Cria arquivo .env se não existir (APÓS instalar composer)
if [ ! -f ".env" ]; then
    echo "Criando arquivo .env..."
    cp .env.example .env
    
    # Configura banco de dados automaticamente
    sed -i 's/DB_CONNECTION=sqlite/DB_CONNECTION=mysql/' .env
    sed -i 's/# DB_HOST=127.0.0.1/DB_HOST=db/' .env
    sed -i 's/# DB_PORT=3306/DB_PORT=3306/' .env
    sed -i 's/# DB_DATABASE=laravel/DB_DATABASE=tarefas/' .env
    sed -i 's/# DB_USERNAME=root/DB_USERNAME=tarefas/' .env
    sed -i 's/# DB_PASSWORD=/DB_PASSWORD=tarefas/' .env
    
    php artisan key:generate --force
else
    echo "Arquivo .env já existe."
fi

# Verifica se APP_KEY está vazio e gera se necessário
if ! grep -q "APP_KEY=base64:" .env; then
    echo "Gerando APP_KEY..."
    php artisan key:generate --force
fi

# Cria diretórios necessários
mkdir -p storage/logs
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p bootstrap/cache

# Ajusta permissões (CRÍTICO para Laravel funcionar)
echo "Ajustando permissões..."
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Roda migrations automaticamente
echo "Executando migrations..."
php artisan migrate --force

echo "Aplicação pronta!"

# Inicia Apache em foreground
exec apache2-foreground
