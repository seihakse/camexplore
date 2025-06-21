# Build docker docker image

    docker build -t camexplore_20250621 .

# Run docker container

docker run -p 8001:8000
    --name=camexplore_20250621
    --network=mynet
    --restart=always
    -v camexplore_20250621:/app
    -d camexplore_20250621