pipeline {
	agent any 
		stages {
			stage('Checkout') {
				steps {
					echo 'Checking out wordpress theme source code '
					checkout scm 
				}
			}
			stage('Validate Theme') {
				steps {
					sh '''
						test -f theme/devops-demo-theme/style.css
						test -f theme/devops-demo-theme/index.php
						test -f theme-devops-demo-theme/functions.php
						echo "Theme files found successfullly"
					'''
				}
			}
			
		}
}
