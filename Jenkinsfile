pipeline {
    agent any

    environment {
        // Path ke php.exe yang sudah terinstall
        PHP_EXE = 'C:\\php\\php.exe'
        // Path ke project XAMPP
        PROJECT_PATH = 'C:\\xampp\\htdocs\\mydimsammm'
    }

    stages {
        stage('Run PHP Script') {
            steps {
                echo "👉 Menjalankan script PHP di project..."
                // Ganti index.php dengan script utama project kamu
                bat "${PHP_EXE} ${PROJECT_PATH}\\index.php"
            }
        }

        stage('Optional: Run Other Scripts') {
            steps {
                echo "👉 Menjalankan script PHP lain (opsional)..."
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
