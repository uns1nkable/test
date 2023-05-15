pipeline {

  agent {
    kubernetes {
      yamlFile 'builder.yaml'
    }
  }

  stages {

    stage('Deploy App to Kubernetes') {
      steps {
        container('kubectl') {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'kubectl create ns junk'
            sh 'kubectl apply -f ./manifests -n junk'
            integer mySuccess = 1
          }
        }
      }
    }
    stage('Test') {
      steps {
        script {
          if (mySuccess == 1) {
            echo 'Deployment succeeded!'
          }
          else {
            sh "echo 'Deployment failed!'"
          }
        }
      }
    }
        

  }
}
