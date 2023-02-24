pipeline {
    agent any
    // run docker compose up
    stages {
        // // install docker-compose
        // stage('Install docker-compose') {
        //     steps {
        //         sh '''
        //             sudo apt-get update
        //             sudo apt-get install -y python-pip
        //             sudo pip install docker-compose
        //         '''
        //     }
        // }
        



        stage('verify docker') {
            steps {
                sh '''
                    docker --version
                    docker-compose --version
                '''
            }
        }
        stage('Prune Docker data') {
            steps {
                sh 'docker system prune -a --volumes -f'
            }
        }
        stage('Build') {
            steps {
                sh 'docker-compose up -d'
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