pipeline {
    agent any

    environment {
        PHP_EXE = 'C:\\php\\php.exe' // path ke php.exe
        PROJECT_PATH = 'C:\\xampp\\htdocs\\mydimsammm' // ganti sesuai folder project
    }

    stages {
        stage('Run PHP Script') {
            steps {
                echo "👉 Menjalankan script PHP..."
                bat "\"${PHP_EXE}\" \"${PROJECT_PATH}\\index.php\""
            }
        }

        stage('Run Other PHP Scripts (Optional)') {
            steps {
                echo "👉 Menjalankan script PHP tambahan..."
                // bat "\"${PHP_EXE}\" \"${PROJECT_PATH}\\script2.php\""
            }
        }
    }

    post {
        success { echo "✅ Build berhasil!" }
        failure { echo "❌ Build gagal!" }
    }
}
