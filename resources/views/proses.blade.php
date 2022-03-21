<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
@if ($data->msg == 'success')
<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>   
    <strong>{{ 'data uploaded succesfully' }}</strong>
</div>
@endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>PBKK</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $data->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td>Kota Asal</td>
                                <td>{{ $data->kota }}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{ $data->usia }}</td>
                            </tr>
                            <tr>
                                <td>Gaji</td>
                                <td>{{ $data->gaji }} Juta</td>
                            </tr>
                            <img src="images/{{ $data->image_name }}">
                        </table>

                        <a href="/input" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 

Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => '3',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum ketiga, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt ullam neque atque suscipit,',
    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt ullam neque atque suscipit, laborum ab eveniet quisquam et officia, molestiae dolores nam mollitia. Exercitationem omnis commodi assumenda optio doloremque dignissimos nesciunt, modi ut veritatis quam perspiciatis deleniti temporibus blanditiis eos ab ea. Explicabo debitis minima expedita consequatur rerum dicta, cum aliquid aut facilis voluptate cupiditate distinctio dolores corrupti optio vel adipisci? Facere maxime at accusantium deserunt sapiente necessitatibus enim corporis ea minus porro blanditiis, vitae distinctio quas unde voluptas. Fuga eveniet mollitia velit esse reprehenderit, natus culpa deserunt aliquid sint, iusto quas laudantium hic accusamus totam?'
])

Category::create([
    'name' => 'Personal',
    'slug' => 'personal' 
])

Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt ullam neque atque suscipit, laborum ab eveniet quisquam et officia, molestiae dolores nam mollitia. Exercitationem omnis commodi assumenda optio doloremque dignissimos nesciunt, modi ut veritatis quam perspiciatis deleniti temporibus blanditiis eos ab ea. Explicabo debitis minima expedita consequatur rerum dicta, cum aliquid aut facilis voluptate cupiditate distinctio dolores corrupti optio vel adipisci? Facere maxime at accusantium deserunt sapiente necessitatibus enim corporis ea minus porro blanditiis, vitae distinctio quas unde voluptas. Fuga eveniet mollitia velit esse reprehenderit, natus culpa deserunt aliquid sint, iusto quas laudantium hic accusamus totam?