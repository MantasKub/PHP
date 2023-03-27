import { useState } from 'react';
import { useNavigate } from 'react-router-dom';
import axios from 'axios';
import Message from '../../components/message/Message';
import Loading from '../../components/loading/Loading';

function NewProduct() {
  const [message, setMessage] = useState();
  const [loading, setLoading] = useState(false);

  const handleSubmit = (e) => {
    e.preventDefault();

    const data = new FormData(e.target);

    setLoading(true);
    axios.post('http://127.0.0.1:8000/api/products', data)
      .then(resp => setMessage({ m: resp.data, s: 'success' }))
      .catch(error => {
        setMessage({ m: error.response.data, s: 'danger' })
      })
      .finally(() => setLoading(false));
  }

  return (
    <>
      {/* <Loading show={Loading} /> */}
      <h1>New product</h1>
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

export default NewProduct;