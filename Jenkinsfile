pipeline {
    agent any

    environment {
        // Path ke php.exe
        PHP_EXE = 'C:\\php\\php.exe'
        // Path ke project XAMPP-mu
        PROJECT_PATH = 'C:\\xampp\\htdocs\\mydimsammm'
    }

    stages {
        stage('Install Dependencies') {
            steps {
                echo "👉 Menjalankan composer install..."
                // Pastikan composer sudah ada di PATH Windows
                bat "composer install --working-dir=${PROJECT_PATH}"
            }
        }

        stage('Run PHP Script') {
            steps {
                echo "👉 Menjalankan script PHP..."
                // Jalankan index.php, ganti atau tambahkan script lain sesuai project
                bat "${PHP_EXE} ${PROJECT_PATH}\\index.php"
            }
        }

        stage('Run Other PHP Scripts (Optional)') {
            steps {
                echo "👉 Menjalankan script PHP tambahan..."
                // Contoh menjalankan script lain
                // bat "${PHP_EXE} ${PROJECT_PATH}\\script2.php"
            }
        }
    }

    post {
        success {
            echo "✅ Build selesai dengan sukses!"
        }
        failure {
            echo "❌ Build Gagal!"
        }
    }
}
