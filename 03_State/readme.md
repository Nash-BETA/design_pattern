# Stateパターン
## Stateパターンとは
状態をクラスとして表現し、クラスを切り替えることによって「状態の変化」を表す方式です

## 実装内容
占い師の待機状態を想定して、切替のメソッドを作成

## 各ディレクトリー紹介

### conditions.php
running.phpとwait.phpを呼び出す

### running.php
待機状態が「鑑定中」の表示とclassの切替

### wait.php
待機状態が「待機」の表示とclassの切替

### connection.php(interfaceを使いたかったため作成)
wait.phpとconditions.phpに継承

### start.php
Stateパターンを実行するファイル

## 悩んだ点
 + conditions.phpをrunning.phpとwait.phpにclassの継承をしたけっか__constructで無限ループが発生
   + 継承をやめて別々にしてみた

 + 抽象化メソッドでまとめてみようとした。
   + 勉強のためインターフェイスを使用