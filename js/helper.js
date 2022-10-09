export function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

export function write(text) {
  console.log(text)
}