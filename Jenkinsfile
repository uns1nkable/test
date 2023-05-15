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
            def mySuccess = true
          }
        }
      }
    }
    stage('Test') {
      steps {
        if (mySuccess == true) {
          echo 'Deployment succeeded!'
        }
        else {
          sh "echo 'Deployment failed!'"
        }
      }
        

  }
}
