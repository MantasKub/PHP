import { useState, useEffect } from 'react';
import axios from 'axios';

function Products() {
  const [data, setData] = useState([]);


  useEffect(() => {
    //----------Paimame duomenis fetch funkcija--------------
    //   fetch('http://127.0.0.1:8000/api/')
    //     .then(resp => resp.json())
    //     .then(resp => {
    //       setData(resp);
    //     });

    //----------Paimame duomenis axios modulio pagalba--------

    axios.get('http://127.0.0.1:8000/api/products/')
      .then(resp => setData(resp.data));
  }, []);

  return (
    <>
      <h1>New products</h1>
      <div className="row">
        {data.map(product =>
          <div className="col-4" key={product.id}>
            <img src={product.photo}
              alt={product.name} />
            <h4>{product.name}</h4>
          </div>
        )}
      </div>
    </>
  );
}

export default Products;
