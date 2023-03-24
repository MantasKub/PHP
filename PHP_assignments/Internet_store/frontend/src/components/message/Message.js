function Message({ message }) {
  return message &&
    <div className="alert alert-success">{message}</div>
}

export default Message;