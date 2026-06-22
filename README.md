# bookshelf-app

## 環境構築：ポイント

### sail npm installが実行できない場合
・sailコマンドをプロジェクトのルートディレクトリで実行する為には、ユーザーのホームディレクトリ「Macの場合：「〜 ％」」で、
```
echo "alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'" >> ~/.zshrc
```
（「.zshrc」ファイルに「alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'」が追加される）

を実行して、「.zshrc」ファイルに追加後、プロジェクトのルートディレクトリに移動して、
```
source ~/.zshrc
```
を実行して読み込ませてから、
```
sail npm install
```
を実行する

