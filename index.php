<?php 
	echo "Hello World!!";
/* commands
PS C:\wamp64\www\dockerTestApp> docker build -t php-docker-app .
PS C:\wamp64\www\dockerTestApp> docker run -d -p 8080:8080 --name my-php-app php-docker-app
PS C:\wamp64\www\dockerTestApp> docker tag php-docker-app nehalv2014/php-docker-app:latest
PS C:\wamp64\www\dockerTestApp> docker tag php-docker-app nehalv2014/php-docker-app:v1
PS C:\wamp64\www\dockerTestApp> docker tag php-docker-app nehalv2014/php-docker-app:v1.0.0
PS C:\wamp64\www\dockerTestApp> docker push nehalv2014/php-docker-app:latest
PS C:\wamp64\www\dockerTestApp> docker push nehalv2014/php-docker-app:v1
PS C:\wamp64\www\dockerTestApp> docker run --name nginx-container -d nginx:latest
PS C:\wamp64\www\dockerTestApp> docker network create my-app-network
PS C:\wamp64\www\dockerTestApp> docker run --name php-docker-app --network my-app-network -d -p 8080:8080 nehalv2014/php-docker-app:latest
PS C:\wamp64\www\dockerTestApp> docker run --name nginx-container --network my-app-network -d nginx:latest
PS C:\wamp64\www\dockerTestApp> docker exec -it php-docker-app sh
# ping nginx-container
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=1 ttl=64 time=0.365 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=2 ttl=64 time=0.118 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=3 ttl=64 time=0.087 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=4 ttl=64 time=0.097 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=5 ttl=64 time=0.084 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=6 ttl=64 time=0.091 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=7 ttl=64 time=0.082 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=8 ttl=64 time=0.244 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=9 ttl=64 time=0.156 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=10 ttl=64 time=0.098 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=11 ttl=64 time=0.079 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=12 ttl=64 time=0.102 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=13 ttl=64 time=0.084 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=14 ttl=64 time=0.101 ms
64 bytes from nginx-container.my-app-network (172.19.0.3): icmp_seq=15 ttl=64 time=0.122 ms
*/
?>

