pipeline {
    agent any
    // run docker compose up
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
                    sudo service docker start
                    sudo docker-compose build
                    sudo docker-compose up -d
                '''
            }
        }
    }
}