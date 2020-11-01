<!doctype html>
<html lang="ko">
  <head>
    <meta contentType="text/html; charset=utf-8" >
    <title>직원정보</title>
    <style>
      body {
        font-family: 12px;
      }
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
        text-align: center;
      }
     

    </style>
  </head>
  <body>
      <h2>직원 데이터베이스 출력</h2>
    <table>
      <thead>
        <tr>
          <th>번호</th>
          <th>이름</th>
          <th>직책</th>
          <th>전화번호</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $jb_conn = mysqli_connect("127.0.0.1", "root", "", "db" );
          $jb_sql = "SELECT * FROM employee";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr><td>' . $jb_row[ 'num' ] . '</td><td>'. $jb_row[ 'name' ] . '</td><td>' . $jb_row[ 'position' ] . '</td><td>' . $jb_row[ 'tel' ] . '</td></tr>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>