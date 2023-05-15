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
          echo 'Job Name: ' + env.JOB_NAME
          if (env.JOB_NAME == 'pipetest') {
            echo 'Tasks ran on the pipetest job'
          }
          else {
            sh "echo 'Tasks ran elsewhere'"
          }
        }
      }
    }
        

  }
}
