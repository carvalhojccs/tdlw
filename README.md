<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# TUCUNARÉ DELIVERY
## Stack inicial
- Laravel 11.23.5
- Postgres
- Minio
- Mailpit

### Setup do projeto considerando um ambiente de desenvolvimento com docker em máquina virtual (VirtualBox)
Clone o repositório
```sh
git clone git@github.com:carvalhojccs/tdlw.git
```

```sh
cd tdlw
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="TUCUNARÉ DELIVERY"
APP_URL=http://tdlw.local.br
APP_TIMEZONE=America/Sao_Paulo

DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=tdlw
DB_USERNAME=sail
DB_PASSWORD=password
```

Rode a instalação do sail
```sh
docker run --rm -v $(pwd):/opt -w /opt laravelsail/php83-composer:latest composer install
```

Configure o alias do sail no ~/.bashrc caso ainda não o tenha feito
```sh
vim ~/.bashrc
```

```sh
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

Após configurar o alias, recarregue o bashrc

```sh
source ~/.bashrc
```

Suba os containers do projeto
```sh
sail up -d
```

Instale as dependêcias
```sh
sail npm install
```

Gere a key do projeto Laravel
```sh
sail artisan key:generate
```

Rode as migrations
```sh
sail artisan migrate
```

Rode o run dev
```sh
sail npm run dev
```

(Opicional)

Adicione a url do projeto ao arquivo hosts do windows

Acesse o terminal do windows como administrador e execute o comando abaixo:
```sh
notepad C:\Windows\System32\drivers\etc\hosts
```
Adicione a seguinte linha no final do arquivo:
```sh
xxx.xxx.x.xxx tdlw.local.br
```
Troque o xxx.xxx.x.xxx pelo endereço ip da sua máquina virtual

URL´s do projeto
- Sistema
[http://tdlw.local.br](http://tdlw.local.br)
- Mailpit
[http://tdlw.local.br:8025](http://tdlw.local.br:8025)
- Minio
[http://tdlw.local.br:9000](http://tdlw.local.br:9000)
