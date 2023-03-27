import { useState, useEffect } from 'react';
//------Atsakingas uztai kad galetume peradresuoti is vieno tasko i kita-------------
import { useNavigate } from 'react-router-dom';
import axios from 'axios';
import { useParams } from 'react-router-dom';
import Message from '../../components/message/Message';
import Loading from '../../components/loading/Loading';

function EditProduct() {

  useEffect(() => {


    setLoading(true);
    axios.put('http://127.0.0.1:8000/api/products/', id)
      .then(resp => {
        setMessage({ m: resp.data, s: 'success' })
        setTimeout(() => navigate('/admin'), 200);
      })
      .catch(error => {
        setMessage({ m: error.response.data, s: 'danger' })
      })
      .finally(() => setLoading(false));
  }, []);

  const [message, setMessage] = useState();
  const [loading, setLoading] = useState();
  const navigate = useNavigate();
  const { id } = useParams();

  const handleSubmit = (e) => {
    e.preventDefault();

    const data = new FormData(e.target);
  }

  return (
    <>
      <Loading show={loading} />
      <h1>Edit product</h1>
      <Message message={message} />
      <form onSubmit={handleSubmit}>
        <div className="mb-3">
          <label>Title</label>
          <input type="text" name="name" className="form-control" required />
        </div>
        <div className="mb-3">
          <label>SKU</label>
          <input type="text" name="sku" className="form-control" required />
        </div>
        <div className="mb-3">
          <label>Photo</label>
          <input type="text" name="photo" className="form-control" required />
        </div>
        <div className="mb-3">
          <label>Balance in stock</label>
          <input type="number" name="warehouse_qty" className="form-control" required />
        </div>
        <div className="mb-3">
          <label>Price</label>
          <input type="number" name="price" step="0.01" className="form-control" required />
        </div>
        <button className="btn btn-primary">Save</button>
      </form>
    </>
  )
}

export default EditProduct;