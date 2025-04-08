# Base image
FROM php:8.2-cli

# Set working directory in container
WORKDIR /app

# Copy everything in local folder into /app inside container
COPY . /app

# OR copy just the src folder:
# COPY src/ /app/src/

# Command to run PHP built-in server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app"]
