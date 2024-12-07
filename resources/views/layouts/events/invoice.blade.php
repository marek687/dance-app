<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   
</head>
<body>
    <style>
body {
    font-family: DejaVu Sans;
    padding-top:50px;
}

@page { margin: 5px 5px 10px; }
#footer {
    position: fixed;
    left: 20px;
    bottom: 0;
    text-align: center;
    }
#footer .page:after {
    content: counter(page);
}
    </style>

<div id="footer">
    <p class="page"></p>
</div>

<div class="container">

      
    <div class="row">
        <div class="col text-decoration-underline" style="padding-left: 40px">
            <h1>Aktualne kursy w szkole tańca</h1>
        </div>
    </div>
    <div class="row" style="padding-left: 40px">
            <table class="products">
                <tr>
                    <th>Lp.</th>
                    <th>Nazwa kursu</th>
                    <th>Dzien</th>
                    <th>Godzina</ht>
                </tr>
                    @foreach($events as $events)
                <tr class="items">
                        <td style="padding: 20px;">
                            {{$events->id}}
                        </td>
                        <td style="padding: 20px;">
                            {{$events->name}}
                        </td>
                        <td style="padding: 20px;">
                            {{$events->data}}
                        </td>
                        <td style="padding: 20px;">
                            {{$events->time}}
                        </td>
                        
                    @endforeach
                </tr>
                <br>
            </table>
        </div>
    </div>

    <div  style="padding-right: 30px;
                padding-bottom:60px;
                padding-left: 30px;">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quam ex, ornare at volutpat quis, dictum sed sapien. Curabitur viverra sit amet lorem quis tincidunt. Maecenas mattis, mi vitae cursus eleifend, elit justo fringilla ante, id imperdiet ante metus vel tortor. Nunc viverra tincidunt leo eu lobortis. Nam eu sodales velit. Ut blandit, quam a hendrerit finibus, ipsum nulla euismod ipsum, ut commodo felis purus vel purus. In quis ante sed nisi molestie suscipit et ac urna. Maecenas ac ipsum ut velit consectetur condimentum id sed sem. Sed blandit tortor nec tempor suscipit.

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas fringilla risus nec varius consequat. Praesent vel est eu justo lobortis malesuada a ac nunc. Integer ut nisi finibus, posuere eros eget, tempor purus. Nunc rhoncus urna nec tellus viverra, dictum lobortis orci pharetra. Duis vel nibh est. Nulla augue nisi, pellentesque vitae laoreet id, ultricies et justo. Praesent iaculis fermentum risus, at eleifend dolor pellentesque id. Praesent viverra nulla tincidunt diam pretium finibus. Sed sit amet porttitor nisi, eu hendrerit ante. Mauris sollicitudin velit non metus pellentesque, nec pellentesque diam tincidunt. Nullam id metus dictum, consequat dolor in, dignissim nisl. Aenean mollis diam augue, vitae malesuada odio egestas in. Donec ornare rhoncus urna ac sodales.

Aliquam quis lacus eu urna condimentum ornare. Nullam elit metus, molestie ac nibh eget, ultrices blandit nisi. Quisque viverra at sem at congue. Morbi arcu nisl, consectetur in magna vitae, venenatis ultricies tortor. In semper libero convallis ipsum semper pharetra. Mauris nibh nulla, finibus eu eros vel, sodales varius tellus. Pellentesque ac gravida neque, eget rhoncus augue. Praesent fermentum nec nunc tincidunt fringilla. Praesent facilisis lacinia mi. Etiam sed ipsum tempus, sollicitudin libero a, elementum felis. In tincidunt congue eros, ac sodales orci consectetur quis. Curabitur massa lectus, fermentum nec scelerisque ac, dignissim vitae massa.

Sed ac velit quis ligula ullamcorper dictum. Curabitur euismod dui ac est ullamcorper facilisis. Cras vel nulla fermentum sem finibus sollicitudin. Phasellus cursus, libero nec mollis hendrerit, massa eros tincidunt urna, porta rutrum erat ex eu odio. Nulla tristique, dui eu lobortis ultricies, ante velit efficitur sem, ac posuere magna lorem sed enim. Praesent diam eros, ornare quis suscipit a, dapibus quis enim. Nullam vestibulum tellus sed cursus rhoncus. Aliquam sagittis venenatis risus sed feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie neque a odio congue, feugiat finibus justo lacinia. Quisque in lacus libero. Praesent fermentum orci urna, rhoncus tristique erat vulputate quis. Duis pulvinar iaculis arcu, et vehicula sem interdum consequat. Vivamus faucibus arcu et mauris posuere, eget dapibus lorem egestas. Donec porta maximus sem, in varius purus pellentesque at.

Etiam eget porttitor arcu, vitae tempor nunc. Sed imperdiet nunc sed vehicula iaculis. Sed faucibus enim est, ac congue diam pretium at. Aliquam venenatis nunc eu ultricies pharetra. Aenean tincidunt, massa eu mattis lobortis, erat nibh aliquam nibh, a tincidunt odio libero at tortor. Duis sit amet velit iaculis, tincidunt tellus posuere, fringilla metus. Ut ac sapien facilisis, pretium velit sed, venenatis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

Cras sodales ex libero, eget tristique ipsum fringilla vitae. Vivamus ut ex ac orci accumsan pulvinar. Nulla facilisi. Donec malesuada cursus sagittis. Praesent orci justo, tristique non vestibulum eget, mollis non est. Donec imperdiet dolor vitae velit maximus venenatis. Donec vel porta lacus, vel gravida nulla. Vestibulum ac eros aliquam, aliquam dui nec, tempor neque. Quisque dapibus eros sed nunc imperdiet, sed luctus massa pretium. Maecenas dolor justo, lacinia ac leo non, tempus pretium enim. Vivamus laoreet condimentum velit non accumsan. Integer pharetra placerat pharetra. Donec malesuada, lacus et malesuada sollicitudin, sapien velit feugiat diam, vel euismod turpis nulla id arcu. Nulla dignissim sem eu justo egestas iaculis. Vivamus ac nulla ultrices, semper turpis sed, semper nunc.

Vestibulum at metus interdum, mollis arcu sit amet, suscipit velit. Phasellus faucibus blandit consectetur. Vestibulum consequat ipsum ut pellentesque consequat. Suspendisse a tortor in augue accumsan euismod in a erat. Sed volutpat viverra sem, sed faucibus nisi imperdiet convallis. Duis id tempus erat, hendrerit bibendum ex. Aliquam erat volutpat.

In hac habitasse platea dictumst. Praesent sit amet tempus ipsum. Curabitur at pulvinar arcu. Nulla fringilla eros porta, volutpat sem et, ullamcorper tellus. Nullam posuere bibendum libero eget consectetur. Pellentesque quis convallis est. Curabitur sit amet felis nibh. In commodo urna eget arcu efficitur feugiat. Vestibulum tincidunt scelerisque lectus maximus semper. Sed in tortor tincidunt, luctus ex ultrices, lacinia velit.

Nullam sit amet turpis iaculis, lobortis ante a, volutpat dolor. Mauris at tempor urna. Integer tincidunt orci dapibus scelerisque vestibulum. In dolor tortor, accumsan eu auctor sit amet, posuere non justo. Cras efficitur euismod lectus non posuere. Nam sed tellus iaculis, ultrices dolor et, ultricies nunc. Phasellus sodales, nisl vel ornare porta, nulla orci luctus mi, sagittis efficitur augue sapien eu nisl. Ut mi risus, finibus a fringilla eu, bibendum at est. Ut lobortis vulputate malesuada. In suscipit sed massa vel ultrices.

Morbi nec nisl eget libero sodales cursus. Fusce molestie, ligula eu rutrum aliquet, orci mi mollis velit, sit amet lacinia lorem ex eget eros. Sed iaculis turpis vel massa dapibus, quis mollis est tincidunt. Donec imperdiet elit sed ipsum pretium, nec varius nisl sagittis. Aliquam erat volutpat. Nunc ipsum nulla, mattis nec augue sit amet, efficitur viverra quam. Aliquam mollis odio at leo laoreet, vel convallis augue malesuada. Fusce sodales vehicula fringilla. Curabitur at lobortis purus. Curabitur ut augue in lectus fringilla ullamcorper. Morbi faucibus ipsum eu massa sagittis pellentesque. Sed nec varius felis.
</div>


</body>



