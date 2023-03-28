import { useState, useEffect } from 'react';
//------Atsakingas uztai kad galetume peradresuoti is vieno tasko i kita-------------
import { useNavigate } from 'react-router-dom';
import axios from 'axios';
import { useParams } from 'react-router-dom';
import Message from '../../components/message/Message';
import Loading from '../../components/loading/Loading';



function EditProduct() {
  const [message, setMessage] = useState();
  const [loading, setLoading] = useState(false);
  const [data, setData] = useState({
    name: '',
    sku: '',
    photo: '',
    warehouse_qty: '',
    price: ''
  });
  const navigate = useNavigate();
  const { id } = useParams();

  useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/products/' + id)
      .then(resp => setData(resp.data));
  }, []);

  const handleSubmit = (e) => {
    e.preventDefault();

    setLoading(true);
    axios.put('http://127.0.0.1:8000/api/products/' + id, data)
      .then(resp => {
        setMessage({ m: resp.data, s: 'success' });
        setTimeout(() => navigate('/admin'), 200);
      })
      .catch(error => {
        setMessage({ m: error.response.data, s: 'danger' })
      })
      .finally(() => setLoading(false));
  }

  const handleField = (e) => {
    setData({ ...data, [e.target.name]: e.target.value })
  }


  return (
    <>
      {id}
      <Loading show={loading} />
      <h1>Edit product</h1>
      <Message message={message} />
      <form onSubmit={handleSubmit}>
        <div className="mb-3">
          <label>Title</label>
          <input type="text" name="name"
            className="form-control"
            value={data.name}
            onChange={handleField}
            required
          />
        </div>
        <div className="mb-3">
          <label>SKU</label>
          <input type="text"
            name="sku"
            className="form-control"
            value={data.sku}
            onChange={handleField}
            required
          />
        </div>
        <div className="mb-3">
          <label>Photo</label>
          <input type="text"
            name="photo"
            className="form-control"
            value={data.photo}
            onChange={handleField}
            required
          />
        </div>
        <div className="mb-3">
          <label>Balance in stock</label>
          <input type="number"
            name="warehouse_qty"
            className="form-control"
            value={data.warehouse_qty}
            onChange={handleField}
            required
          />
        </div>
        <div className="mb-3">
          <label>Price</label>
          <input type="number"
            name="price" step="0.01"
            className="form-control"
            value={data.price}
            onChange={handleField}
            required
          />
        </div>
        <button className="btn btn-primary">Save</button>
      </form>
    </>
  );
}

export default EditProduct;