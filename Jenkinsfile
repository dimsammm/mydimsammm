pipeline {
    agent any

    environment {
        PHP_EXE = "C:\\$Recycle.Bin\\S-1-5-21-422917948-2734144976-3704770329-1002\\$RQB6Q4F\\php\\windowsXamppPhp\\php.exe"
    }

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
                bat "\"%PHP_EXE%\" index.php"
            }
        }

        stage('Unit Test') {
            steps {
                echo "👉 Running tests..."
                bat "\"%PHP_EXE%\" tests.php"
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
