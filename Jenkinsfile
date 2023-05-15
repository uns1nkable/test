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
          }
        }
      }
    }
    stage('Test') {
      steps {
        script {
          if (env.BRANCH_NAME == 'main') {
            echo 'Executed on the main branch'
          }
          else {
            sh "echo 'Executed elsewhere'"
          }
        }
      }
    }
        

  }
}
