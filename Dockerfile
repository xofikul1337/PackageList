# Use the official PHP image from Docker Hub
FROM php:8.2-cli

# Set the working directory
WORKDIR /app

# Copy the PHP file into the container
COPY index.php .

# Expose port 10000
EXPOSE 10000

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000"]
