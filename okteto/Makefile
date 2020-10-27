.ONESHELL:
enable: 
	@echo export KUBECONFIG=$$PWD/okteto-kube.config:${KUBECONFIG:-$$HOME/.kube/config}

apply:
	@KUBECONFIG=$$PWD/okteto-kube.config:${KUBECONFIG:-$$HOME/.kube/config} kubectl apply -f ../k8s

