<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  <title>matilda</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
          <br> <br>
                  <div class="card">
                      <div class="card-header">Отчет за месяц</div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($reports) > 0)
                    <div class="panel-body">




                      <table class="table table-striped task-table">

                        <!-- Заголовок таблицы -->
                        <thead>
                          <th>id Paralax</th>
                          <th>имя</th>
                          <th>год</th>
                          <th>месяц</th>
                          <th>количество рабочих часов</th>
                          <th>отработано</th>
                          <th>зарплата</th>


                        </thead>

                        <!-- Тело таблицы -->
                        <tbody>
                          @foreach ($reports as $report)
                            <tr>
                              <td class="table-text">
                                <div>{{ $report->idParalax }}</div>
                              </td>
                              <td class="table-text">
                                <div>{{ $report->name }}</div>
                              </td>
                              <td class="table-text">
                                <div>{{ $report->year}}</div>
                              </td>
                              <td class="table-text">
                                <div>{{ $report->month}}</div>
                              </td>
                              <td class="table-text">
                                <div>{{ $report->h_month}}</div>
                              </td>
                              <td class="table-text">
                                <div>{{ $report->worked_h_month}}</div>
                              </td>
                              <td class="table-text">
                                <div>{{ $report->fixed_salary}}</div>
                              </td>
                          

                              <td class="table-text">
                                <div>
                                  </form>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    @else
                        No Records
                    @endif
                </div>
        </div>

<!-- кнопка скачать -->
        <a class="btn btn-warning my-2 my-sm-0" href="{{ route('export') }}">Скачать отчет</a>
        <br>
        <br>
        <br>

    </div>
  </div>
</div>
<script>
    $(".delete").on("submit", function(){
        return confirm("Вы уверены?");
    });
</script>

</body>
</html>
