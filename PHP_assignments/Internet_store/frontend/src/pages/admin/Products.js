import { useContext, useEffect } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';
import MainContext from '../../context/MainContext';

function Products() {
  const { data, setLoading, setData, refresh, setRefresh, setMessage } = useContext(MainContext);


  useEffect(() => {
    setLoading(true);
    axios.get('http://127.0.0.1:8000/api/products')
      .then(resp => {
        setData(resp.data)
        setLoading(false);
      })
      .finally(() => setLoading(false));
  }, [refresh]);

  const handleDelete = (id) => {
    setLoading(true);

    axios.delete('http://127.0.0.1:8000/api/products/' + id)
      .then(resp => {
        setMessage({ m: resp.data, s: 'success' });
        setRefresh(!refresh);
      })
      .finally(() => setLoading(false));
  }

  return (
    <>
      <div className="s-flex justify-content-between align-items-center">
        <h1>Products list</h1>
        <Link to="/admin/new-product" className="btn btn-primary">New product</Link>
      </div>
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
              <td><Link to={'/admin/edit-product/' + product.id} className="btn btn-warning">Edit</Link></td>
            </tr>
          )}
        </tbody>
      </table>
    </>
  );
}

export default Products;
