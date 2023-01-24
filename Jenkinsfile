pipeline {
    agent any
    stages {
         stage('Docker build') {
                    steps {
                        sh 'echo ======= docker build ====='
                        sh 'docker-compose stop'
                        sh 'cp .env.staging .env'
                        sh 'docker-compose build'
                        sh 'docker-compose up -d'
                        sh 'echo ======= docker stop ====='
                    }
                }

        stage('laravel') {
                    steps {
                        sh 'docker exec --tty laravel07_fpm composer install'
                        sh 'docker exec --tty laravel07_fpm chmod -R 777 storage'
                        sh 'docker exec --tty laravel07_fpm php artisan key:generate'
                        sh 'docker exec --tty laravel07_fpm php artisan storage:link'
                        sh 'docker exec --tty laravel07_fpm php artisan migrate'
                    }
        }
    }
}
