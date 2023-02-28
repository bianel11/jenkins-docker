pipeline {
    agent any
    // run docker compose up
    stages {
        stage('verify docker') {
            steps {
                sh '''
                    docker --version
                    docker-compose --version
                '''
            }
        }
        stage('Build') {
            steps {
                sh 'docker-compose up -d'
            }
        }
    }
}