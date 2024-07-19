FROM node:21-alpine
WORKDIR /app
ENV NODE_OPTIONS=--openssl-legacy-provider

COPY package.json ./

COPY . .

EXPOSE 8080

CMD ["sh", "entrypoint.sh"]