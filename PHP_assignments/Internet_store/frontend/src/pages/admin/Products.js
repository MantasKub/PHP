import { useState, useEffect } from 'react';
import axios from 'axios';

function Products() {
  const [data, setData] = useState([]);


  useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/')
      .then(resp => setData(resp.data));
  }, []);

  const handleDelete = (id) => {
    axios.delete('http://127.0.0.1:8000/api/products/' + id)
      .then(resp => console.log(resp.data));
  }

  return (
    <>
      <h1>Products list</h1>
      <table className="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>SKU</th>
            <th>Balance in stock</th>
            <th>Price</th>
            <th>Status</th>
            <th>Creation date</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {data.map(product =>
            <tr key={product.id}>
              <td>{product.id}</td>
              <td>{product.name}</td>
              <td>{product.sku}</td>
              <td>{product.warehouse_qty}</td>
              <td>{product.price}</td>
              <td>{product.status ? 'Enabled' : 'Disabled'}</td>
              <td>{(new Date(product.created_at)).toLocaleString('lt-LT')}</td>
              <td className="btn btn-danger" onClick={() => handleDelete(product.id)}>Delete</td>
            </tr>
          )}
        </tbody>
      </table>
    </>
  );
}

export default Products;
