# eComH24 Midterm solution
Winter 20204 eCommerce 42-411-VA Midterm Question 4 solution

## Running the Docker container to host the Web application

Start Docker Desktop first.

clone this repository to {some folder}

Then run 
```
docker run --name myXampp -p 22:22 -p 80:80 -d -v {some folder}:/opt/lampp/htdocs tomsik68/xampp
```

## Accessing the project

Open a browser and point it to

```
http://localhost
```

