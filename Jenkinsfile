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
        // stage('Prune Docker data') {
        //     steps {
        //         sh 'docker system prune -a --volumes -f'
        //     }
        // }
        stage('Build') {
            steps {
                sh '/usr/local/bin/docker-compose up -d'
            }
        }
        // stage('Test') {
        //     steps {
        //         sh 'docker-compose exec -T app npm run test'
        //     }
        // }
        // stage('Deploy') {
        //     steps {
        //         sh 'docker-compose exec -T app npm run deploy'
        //     }
        // }
    }
}