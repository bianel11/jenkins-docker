pipeline {
    agent any
    // run docker compose up comment asd
    stages {
        stage('verify docker') {
            steps {
                sh '''
                    sudo docker --version
                    sudo docker-compose --version
                '''
            }
        }
        stage('Build') {
            steps {
                sh '''
                    sudo docker-compose up -d
                '''
            }
        }
    }
}