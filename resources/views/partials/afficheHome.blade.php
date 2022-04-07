<section>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">age</th>
            <th scope="col">email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ Auth::user()->id }} </th>
            <td> {{Auth::user()->name}} </td>
            <td> {{Auth::user()->prenom}} </td>
            <td> {{Auth::user()->age}} </td>
            <td> {{Auth::user()->ageemail}} </td> 
          </tr>
         
        </tbody>
      </table>
</section>