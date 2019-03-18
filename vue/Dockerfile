FROM node:10.13.0-alpine

ENV NODE_ENV=development
# 静的コンテンツを配信するシンプルな http サーバをインストールする
RUN npm install -g http-server

# カレントワーキングディレクトリとして '/var/www' フォルダを指定する
WORKDIR /var/www

# `package.json` と `package-lock.json` （あれば）を両方コピーする
# COPY package*.json .

# プロジェクトの依存ライブラリをインストールする
# RUN npm install

# カレントワーキングディレクトリ(つまり '/var/www' フォルダ)にプロジェクトのファイルやフォルダをコピーする
COPY frontend .

# プロジェクトの依存ライブラリをインストールする
RUN npm install

RUN npm run build
#RUN cp -r dist/* /var/www 

EXPOSE 8000
#CMD [ "http-server", "dist" ] 
CMD [ "npm", "start" ]
#CMD ["nginx", "-g", "daemon off;"] 