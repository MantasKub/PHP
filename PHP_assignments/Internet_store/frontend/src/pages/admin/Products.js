import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';
import Loading from '../../components/loading/Loading';
import Message from '../../components/message/Message';

function Products() {
  const [data, setData] = useState([]);
  const [message, setMessage] = useState(false);
  const [refresh, setRefresh] = useState(false);
  const [loading, setLoading] = useState(false);


  useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/products')
      .then(resp => {
        setData(resp.data)
        setLoading(false);
      });
      .finally(() => setLoading(false));
  }, [refresh]);

  const handleDelete = (id) => {
    setLoading(true);

    axios.delete('http://127.0.0.1:8000/api/products/' + id)
      .then(resp => {
        setMessage({ m: resp.data, s: 'success' });
        setLoading(false);
        setRefresh(!refresh);
      });
  }

  return (
    <>
      <Loading show={loading} />
      <div className="s-flex justify-content-between align-items-center">
        <h1>Products list</h1>
        <Link to="/admin/new-product" className="btn btn-primary">New product</Link>
      </div>
      <h1>Products list</h1>
      <Message message={message} />
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
              <td><button className="btn btn-danger" onClick={() => handleDelete(product.id)}>Delete</button></td>
            </tr>
          )}
        </tbody>
      </table>
    </>
  );
}

export default Products;
