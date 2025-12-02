pipeline {
  agent any

  stages {
    stage('Checkout') {
      steps {
        checkout scm
      }
    }

    stage('Install') {
      steps {
        bat 'composer install'
      }
    }

    stage('Run PHP Script') {
      steps {
        powershell 'php index.php'
      }
    }

    stage('Unit Test') {
      steps {
        powershell 'vendor\\bin\\phpunit'
      }
    }
  }
}
