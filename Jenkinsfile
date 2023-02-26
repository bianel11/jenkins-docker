pipeline {
    agent any
    // run docker compose up
    stages {
        stage('verify docker') {
            steps {
                sh '''
                    docker --version
                    /usr/local/bin/docker-compose --version
                '''
            }
        }
        stage('Build') {
            steps {
                sh '/usr/local/bin/docker-compose up -d'
            }
        }
    }
}