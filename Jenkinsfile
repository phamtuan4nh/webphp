pipeline {
    agent any
    
    stages {
        stage('gitclone') {
            steps {
                echo 'Hello World'
                git branch: 'main', credentialsId: '1d89de42-ee16-4bf7-a188-9ad70a95d3fb', url: 'https://github.com/phamtuan4nh/webphp.git'
            }
        }
        stage('Docker-compose') {
            steps {
                echo 'Docker Compose'
              sh 'docker-compose up -d'  
            }
        }
    }
}
