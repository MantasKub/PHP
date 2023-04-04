import { useEffect, useContext } from 'react';
import axios from 'axios';
import MainContext from '../context/MainContext';
import Product from '../components/product/Product';

function Products() {
  // const [data, setData] = useState([]);
  // const [refresh, setRefresh] = useState();
  const { data, setData, refresh, setLoading, setMessage } = useContext(MainContext);


  useEffect(() => {
    setLoading(true);
    setMessage(false);
    //----------Paimame duomenis fetch funkcija--------------
    //   fetch('http://127.0.0.1:8000/api/')
    //     .then(resp => resp.json())
    //     .then(resp => {
    //       setData(resp);
    //     });

    //----------Paimame duomenis axios modulio pagalba--------

    axios.get('http://127.0.0.1:8000/api/products/')
      .then(resp => setData(resp.data))
      .finally(() => setLoading(false));
  }, [refresh]);

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
