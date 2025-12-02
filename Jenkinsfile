pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                echo "👉 Checking out source code..."
                checkout scm
            }
        }

        stage('Run PHP Script') {
            steps {
                echo "👉 Running PHP script..."
                bat 'php index.php'
            }
        }

        stage('Unit Test') {
            steps {
                echo "👉 Running tests..."
                bat 'php tests.php'
            }
        }
    }

    post {
        success {
            echo "🎉 Build Sukses!"
        }
        failure {
            echo "❌ Build Gagal!"
        }
    }
}
